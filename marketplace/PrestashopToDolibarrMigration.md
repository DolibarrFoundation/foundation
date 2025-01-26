# PrestaShop to Dolibarr Migration Guide

## 1. Create Admin User
- Create Admin User (If does not exist) and assign all permissions.
## 2. Activate the Website module and all dependencies modules
- dependencies modules : Modules Third Parties, Vendors, Product, Service, Categorie, Sales Orders, Invoices, Banque, Mailing, Website
## 3. Add the following Dolibarr constant:
  - WEBSITE_PHP_ALLOW_WRITE = 1

## 4. Activate Marketplace Module

## 5. Run Import Scripts (In this order)

- Import Categories
    php marketplace/scripts/import-cats.php db_host db_name db_user db_password db_port clean_all_before_import(0|1)

- Import Third-Parties
    php marketplace/scripts/import-third-parties.php db_host db_user db_password db_port limit ref_website clean_all_before_import(0|1)

- Import Products
    php marketplace/scripts/import-products.php db_host db_user db_password db_port limit clean_all_before_import(0|1)

- Import Attached Files
    php marketplace/scripts/import-attached-files.php db_host db_user db_password db_port source_dir

- Import Orders
    php marketplace/scripts/import-orders.php db_host db_user db_password db_port limit clean_all_before_import(0|1)

## 6. Add this rules in Apache virtual host configuration 

    # Enable RewriteEngine
    RewriteEngine on

	# Products rewrite rules
	RewriteCond %{REQUEST_URI} ^/([a-z]{2})/([a-z\-]+)/([0-9]+)-([a-z0-9\-]+)\.html$ [NC]
	RewriteRule ^ /product.php?title=%4&extid=%3&l=%1 [L,R=301]
	
	# Categories rewrite rules
	RewriteCond %{REQUEST_URI} ^/([a-z]{2})/([0-9]{1,2})-([a-z\-]+)$ [NC]
	RewriteRule ^ /index.php?title=%3&extcat=%2&l=%1 [L,R=301]
	
	# Search
	RewriteCond %{REQUEST_URI} /recherche [NC]
	RewriteCond %{QUERY_STRING} search_query=([^&]+)
	RewriteRule ^ /index.php?controller=search&website=marketplace&search_query=%1 [L,R=301]
	
	RewriteCond %{REQUEST_URI} ^/search [NC]
	RewriteCond %{QUERY_STRING} search_query=([^&]+)
	RewriteRule ^ /index.php?controller=search&website=marketplace&search_query=%1 [L,R=301]
	
	
	# Other
	RewriteRule ^/en/new-products /index.php?title=new-products&cat=21&list=new&l=en [L,R=permanent]
	RewriteRule ^/fr/nouveaux-produits /index.php?title=nouveaux-produits&cat=21&list=new&l=fr [L,R=permanent]
	RewriteRule ^/es/new-products /index.php?title=nuevos-productos&cat=21&list=new&l=es [L,R=permanent]
	RewriteRule ^/it/nuovi-prodotti /index.php?title=nuovi-prodotti&cat=21&list=new&l=it [L,R=permanent]
	RewriteRule ^/de/nouveaux-produits /index.php?title=new-products&cat=21&list=new&l=de [L,R=permanent]
	
	# Page of language
	RewriteRule ^/([a-z]{2})$ /index.php?l=$1 [L,R=permanent]
	RewriteRule ^/([a-z]{2})/$ /index.php?l=$1 [L,R=permanent]


	# Redirection invisible vers un autre site
	SSLProxyEngine On
	SSLProxyVerify none
	SSLProxyCheckPeerCN off
	SSLProxyCheckPeerName off
	ProxyPreserveHost Off
	ProxyPass "/public/payment/" "https://admin.dolibarr.org/public/payment/"
	ProxyPassReverse "/public/payment/" "https://admin.dolibarr.org/public/payment/"
	ProxyPass "/includes/" "https://admin.dolibarr.org/includes/"
	ProxyPassReverse "/includes/" "https://admin.dolibarr.org/includes/"
	ProxyPass "/theme/" "https://admin.dolibarr.org/theme/"
	ProxyPassReverse "/theme/" "https://admin.dolibarr.org/theme/"
	ProxyPass "/core/js/" "https://admin.dolibarr.org/core/js/"
	ProxyPassReverse "/core/js/" "https://admin.dolibarr.org/core/js/"


## 7. Add this rules in Dolibarr Apache Configurations

   <IfModule mod_headers.c>
        Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"
    </IfModule>

## 8. Set File Permissions

Ensure that all files in the product documents directory have the correct permissions by running the following command:
sudo chmod -R 755 /_YOUR_PATH_/dolibarr/documents/produit/
