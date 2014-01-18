#!/bin/ksh
#====================================================================
# Script to register user/hostname on GnuDIP-server via SSH/admin-cmd
# Expected PARAMS:
# 1 = SSH-user for admin access to GnuDIP-server
# 2 = GnuDIP-Server, SSH access must be setup via keys
# 3 = Path to admin-commands on GnuDIP-server
# 4 = user/hostname to register
# 5 = user-email
# 6 = DynDNS Domainname to register host in 
# 7,8 = user supplied password, need to be identical
#
# ReturnCodes
# 0 = success
# 1 = user/host already exists for that domain
# 2 = invalid request, see logs
# 3 = wrong PWD or mismatch
# * = unknown error
#====================================================================
SSU=$1; SRV=$2; BIN=$3; USR=$4; EMA=$5; DOM=$6; PW1=$7; PW2=$8

# commands
SSH="/usr/bin/ssh"
LOG="/usr/bin/logger -t gnudip-adm "

# check password
[ -z "$PW1" -o "$PW1" != "$PW2" ] && return 3

CMD="$BIN/gdipuseradd.pl -p $PW1 -m $EMA $USR $DOM"
OUT="$($SSH $SSU@$SRV $CMD 2>&1)"
RC=$?

# log all registrations
$LOG "useradd (PWD) -m $EMA $USR $DOM - MSG: $OUT"
return $RC
