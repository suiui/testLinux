#!/bin/bash 
sysWinLine1="hello world ^M"
echo "sysWinLine1"
echo "$sysWinLine1">>datafile
sysWinLine2="hello world2 ^M"
echo "$sysWinLine2">>datafile
cat datafile
echo "\n"
#mac is unix system so "-i"  need "" mac 是unix 系统 所以需要加入 "" 命令才能执行
sed -i "" "s/\^M//g" datafile
cat datafile
echo "\n"
rm -rf datafile
cat datafile
echo "\n"

