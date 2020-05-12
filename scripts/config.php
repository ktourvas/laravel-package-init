<?php

echo "Welcome to the laravel package initializer\n";

echo "Please input the vendor name for your package: ";
$vendor = rtrim(fgets(STDIN));
echo "Ok the package's vendor name is changed to:" . $vendor."\n";

echo "Please input the package name for your package: ";
$name = rtrim(fgets(STDIN));
echo "Ok the package's name is changed to:" . $name."\n";

echo "What would you like your package's namespace to be?: ";
$namespace = rtrim(fgets(STDIN));
echo "Ok the package's namespace is changed to:" . $namespace."\n";

echo "What would you like your package's views/assets slug to be?: ";
$slug = rtrim(fgets(STDIN));
echo "Ok the package's views/assets slug is changed to:" . $slug."\n";

echo "Please input the path to your local laravel installation: ";
$laravel = rtrim(fgets(STDIN));
echo "Ok the package's assets will be copied to this path:" . $laravel. "/public/assets/".$slug."\n";

$files = rsearch(__DIR__.'/../', '/.*php|.*json|.*js/');

foreach ($files as $file) {
    $data = file_get_contents( $file );

    $data = str_replace("{PackageNamespace}", $namespace, $data );
    $data = str_replace("{slug}", $slug, $data );
    $data = str_replace("{vendorname}/{packagename}", $vendor.'/'.$name, $data );
    $data = str_replace("{PackageNamespaceDouble}",
        str_replace("\\", "\\\\", $namespace ),
        $data );
    $data = str_replace("{laravelinstallationpath}", $laravel, $data );

    file_put_contents( $file, $data );
}

function rsearch($folder, $pattern) {
    $dir = new RecursiveDirectoryIterator($folder);
    $ite = new RecursiveIteratorIterator($dir);
    $files = new RegexIterator($ite, $pattern, RegexIterator::GET_MATCH);
    $fileList = array();
    foreach($files as $file) {
        if( is_file($file[0]) ) {
            $fileList = array_merge($fileList, $file);
        }
    }
    return $fileList;
}