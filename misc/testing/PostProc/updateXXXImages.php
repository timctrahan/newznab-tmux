<?php

require_once dirname(__DIR__, 3).DIRECTORY_SEPARATOR.'bootstrap/autoload.php';

use App\Models\XxxInfo;
use Blacklight\ColorCLI;

$covers = $updated = $deleted = 0;

if ($argc === 1 || $argv[1] !== 'true') {
    exit(ColorCLI::error("\nThis script will check all images in covers/xxx and compare to db->xxxinfo.\nTo run:\nphp $argv[0] true\n"));
}

$path2covers = NN_COVERS.'xxx'.DS;

$dirItr = new RecursiveDirectoryIterator($path2covers);
$itr = new RecursiveIteratorIterator($dirItr, RecursiveIteratorIterator::LEAVES_ONLY);
foreach ($itr as $filePath) {
    if (is_file($filePath) && preg_match('/-cover\.jpg/', $filePath)) {
        preg_match('/(\d+)-cover\.jpg/', basename($filePath), $match);
        if (isset($match[1])) {
            $run = XxxInfo::query()->where('cover', '=', 0)->where('id', $match[1])->update(['cover' => 1]);
            if ($run >= 1) {
                $covers++;
            } else {
                $run = XxxInfo::query()->where('id', $match[1])->select(['id'])->get();
                if ($run->count() === 0) {
                    echo ColorCLI::info($filePath.' not found in db.');
                }
            }
        }
    }
    if (is_file($filePath) && preg_match('/-backdrop\.jpg/', $filePath)) {
        preg_match('/(\d+)-backdrop\.jpg/', basename($filePath), $match1);
        if (isset($match1[1])) {
            $run = XxxInfo::query()->where(['backdrop' => 0, 'id' => $match1[1]])->update(['backdrop' => 1]);
            if ($run >= 1) {
                $updated++;
            } else {
                $run = XxxInfo::query()->where('id', $match1[1])->select(['id'])->get();
                if ($run->count() === 0) {
                    echo ColorCLI::info($filePath.' not found in db.');
                }
            }
        }
    }
}

$qry = XxxInfo::query()->where('cover', '=', 1)->select(['id'])->get();
    foreach ($qry as $rows) {
        if (! is_file($path2covers.$rows['id'].'-cover.jpg')) {
            XxxInfo::query()->where(['cover' => 1, 'id' => $rows['id']])->update(['cover' => 0]);
            echo ColorCLI::info($path2covers.$rows['id'].'-cover.jpg does not exist.');
            $deleted++;
        }
    }
$qry = XxxInfo::query()->where('backdrop', '=', 1)->select(['id'])->get();
    foreach ($qry1 as $rows) {
        if (! is_file($path2covers.$rows['id'].'-backdrop.jpg')) {
            XxxInfo::query()->where(['backdrop' => 1, 'id' => $rows['id']])->update(['backdrop' => 0]);
            echo ColorCLI::info($path2covers.$rows['id'].'-backdrop.jpg does not exist.');
            $deleted++;
        }
    }
echo ColorCLI::header($covers.' covers set.');
echo ColorCLI::header($updated.' backdrops set.');
echo ColorCLI::header($deleted.' movies unset.');
