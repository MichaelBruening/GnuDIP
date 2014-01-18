
GnuDIP ELGG V1.8 Plugin to integrate a GnuDIP dynamic DNS service

This plugin integrates a GnuDIP-based dynamic DNS service into your ELGG site.
The idea is to not have a free registration setup for the world, but for the members
of a GnuDIP-group where membership needs to be approved.

The registration is done via SSH executing the admin-command on the GnuDIP-server.
The administrative SSH-user and the GnuDIP-server as well as the URL of the GnuDIP-
Webfrontend have to be set by the admin via plugin settings.

Users are encouraged to use a password different from the one in use with ELGG and
they have to login into the integrated webfrontend separately, where they can access
the GnuDIP online documentation and download clients for automated dynamic DNS updates.

