#!/bin/bash

srcfile=svenska-stader.csv
header=$(head -1 src/${srcfile})

if locale -a | grep -q ^sv_SE.utf8; then
    echo ${header} > ./src/${srcfile}.swp
    tail -n +2 ./src/${srcfile} | uniq | LC_ALL=sv_SE.UTF-8 sort >> ./src/${srcfile}.swp
    mv ./src/${srcfile}.swp ./src/${srcfile}
    count=$(cat ./src/${srcfile} | wc -l)
    echo "Sort completed. ${count} unique entries sorted."
else
    echo 'Error: locale sv_SE.UTF-8 is not available'
    exit 1
fi
