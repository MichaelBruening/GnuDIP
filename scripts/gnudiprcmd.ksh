#!/bin/ksh
#=================================================================
#PARAMS:
SSU=$1; SRV=$2; BIN=$3; USR=$4; EMA=$5; DOM=$6; PW1=$7; PW2=$8

#Setup
SSH=/usr/bin/ssh

#ReturnCodes
# 0 = success
# 1 = user already existent
# 2 = invalid request, see logs
# 3 = wrong PWD or mismatch
# 4 = unknown

[ -z "$PW1" -o "$PW1" != "$PW2" ] && return 3
CMD="$BIN/gdipuseradd.pl -p $PW1 -m $EMA $USR $DOM"
OUT="$($SSH $SSU@$SRV $CMD 2>&1)"
RC=$?
/usr/bin/logger -t gnudip-adm "useradd -p PWD -m $EMA $USR $DOM - MSG: $OUT"
return $RC
