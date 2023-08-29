#!/bin/bash
hostname="mariadb"
ip_addr="127.0.0.1"


docker compose up

sudo awk -v ip=$ip_addr -v hostname=$hostname '
$1 == ip {
if (!found) {
  if($0 !~ hostname) { print $0, hostname} else {print}
    found = 1
  } else {
  print
}
}
$1 != ip {
print
}
' /etc/hosts > tmp && sudo mv tmp /etc/hosts

