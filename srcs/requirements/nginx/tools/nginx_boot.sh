#!/bin/bash

# #!/bin/bash, it means that every command in the script should be interpreted by the Bash shell.

# Creating Your CSR with OpenSSL
# https://mariadb.com/docs/xpand/security/data-in-transit-encryption/create-self-signed-certificates-keys-openssl/
# https://www.digicert.com/kb/csr-ssl-installation/nginx-openssl.htm

# Use of generating a Certificate Signing Request (CSR)
# - A Certificate Signing Request (CSR) is essential for obtaining an SSL/TLS certificate. It contains the public key and identifying information that the Certificate Authority (CA) needs to issue a certificate.
#    By generating a CSR and submitting it to a CA, you can obtain a certificate that enables secure communications for your website or other services.

# openssl req - initiates the cert request 
# -x509 - This option specifies that the output should be a self-signed certificate instead of a certificate signing request (CSR). for generating a self-signed certificate.
# -nodes - This option specifies that the private key should not be encrypted. By default, OpenSSL will prompt you for a passphrase to encrypt the private key. Using -nodes skips this encryption, meaning the private key will be stored in plain text.
# -days 365 - certificate will be valid for 365 days from the date of creation.
# -newkey rsa:4096 - generates a new private key at the same time as generating the cert. rsa key with a length of 4096 bits
# -keyout /etc/... - where the private key will be stored.
# -out /etc/... - where the self-signed certificate will be stored.
# -subj "/C=..." subject field of the cert

if [ ! -f /etc/ssl/certs/nginx.crt ]; then
	echo "NGINX: setting up ssl...";
	openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/welim.key -out /etc/ssl/certs/welim.crt - subj "/C=MY/ST=Selangor/L=Subang Jaya/O=42/CN=welim.42.fr";
	echo "NGINX: ssl is set up.";
fi

exec "$@"