<?php

if (!function_exists('s3_asset')) {
    function s3_asset(string $path): string
    {
        $region = env("AWS_DEFAULT_REGION");
        $object_store = env("AWS_BUCKET");
        $url = "https://$object_store.s3.$region.amazonaws.com/$path";

        return $url;
    }
}
