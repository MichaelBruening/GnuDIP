#!/bin/ksh
#====================================================================
# Script to register user/hostname on GnuDIP-server via SSH/admin-cmd
# Expected PARAMS:
# 1 = SSH-user for admin access to GnuDIP-server
# 2 = GnuDIP-Server[:port], SSH access must be setup via keys
# 3 = Path to admin-commands on GnuDIP-server
# 4 = user/hostname to register
# 5 = user-email
# 6 = DynDNS Domainname to register host in 
# 7,8 = user supplied password, need to be identical
#
# ReturnCodes
# 0 = success (gdipuseradd.pl)
# 1 = user/host already exists for that domain (gdipuseradd.pl)
# 2 = invalid request, see logs (gdipuseradd.pl)
# 3 = wrong PWD or mismatch
# 4 = wrong port setting, admin error?
# * = unknown error
#====================================================================
SSU=$1; SRV=$2; BIN=$3; USR=$4; EMA=$5; DOM=$6; PW1=$7; PW2=$8

# commands
SSH="/usr/bin/ssh"
LOG="/usr/bin/logger -t gnudip-adm "

# Check: non-standard port given via SRV:PRT?
echo "$SRV"|/usr/bin/tr ':' ' ' |read SRV PRT

# minimal check, is PRT numeric?
expr $PRT + 0 >/dev/null 2>&1 || return 4
[ ! -z "$PRT" ] && SSH="$SSH -p$PRT"

# check password
[ -z "$PW1" -o "$PW1" != "$PW2" ] && return 3

CMD="$BIN/gdipuseradd.pl -p $PW1 -m $EMA $USR $DOM"
OUT="$($SSH $SSU@$SRV $CMD 2>&1)"
RC=$?

# log all registrations
$LOG "useradd (PWD) -m $EMA $USR $DOM - MSG: $OUT"
return $RC
