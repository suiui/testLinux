#!/bin/bash 
sysWinLine1="hello world ^M"
echo "sysWinLine1"
echo "$sysWinLine1">>datafile
sysWinLine2="hello world2 ^M"
echo "$sysWinLine2">>datafile
cat datafile
echo "\n"
#mac is unix system so "-i"  need "" mac ��unix ϵͳ ������Ҫ���� "" �������ִ��
sed -i "" "s/\^M//g" datafile
cat datafile
echo "\n"
rm -rf datafile
cat datafile
echo "\n"

