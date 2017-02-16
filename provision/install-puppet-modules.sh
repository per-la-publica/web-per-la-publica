#!/bin/bash

# update last version of puppet
sudo puppet module install gajdaw-puppet
sudo puppet apply -e "include puppet"

sudo puppet module install puppetlabs-apt
sudo puppet module install saz-locales
