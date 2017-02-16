#
# Definir els repositoris APT perquè apuntin al mirror de
# Caliu (molt ràpid perquè està al Campus Nord).
#

# Que no s'instal·li cap package fins que s'hagin configurat els repos.
# Necessari perquè l'ordre d'execució del manifest és arbitrari.
Apt::Source <| |> -> Package <| |>

class { 'apt':
  purge_sources_list   => true,
  purge_sources_list_d => true,
}

apt::source { 'ubuntu_base':
  location    => 'http://ftp.caliu.cat/pub/distribucions/ubuntu/archive/',
  repos       => 'main restricted universe multiverse',
  include_src => false,
}

apt::source { 'ubuntu_updates':
  location    => 'http://ftp.caliu.cat/pub/distribucions/ubuntu/archive/',
  release     => "${lsbdistcodename}-updates",
  repos       => 'main restricted universe multiverse',
  include_src => false,
}

apt::source { 'ubuntu_security':
  location    => 'http://ftp.caliu.cat/pub/distribucions/ubuntu/archive/',
  release     => "${lsbdistcodename}-security",
  repos       => 'main restricted universe multiverse',
  include_src => false,
}

apt::source { 'puppetlabs':
  location   => 'http://apt.puppetlabs.com',
  repos      => 'main',
  key        => '47B320EB4C7C375AA9DAE1A01054B7A24BD6EC30',
  key_server => 'pgp.mit.edu',
}

#
# Instal·lar locales ca_ES i es_ES (volem ca_ES per a la BD PostgreSQL)
#
class { 'locales':
  default_locale => 'en_US.UTF-8',
  locales        => [ 'en_US.UTF-8 UTF-8', 'ca_ES.UTF-8 UTF-8',
                      'es_ES.UTF-8 UTF-8' ],
}
