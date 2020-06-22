.PHONY: install serve

install:
	composer install

serve-setup:
	php -S localhost:8000
open-browser:
	python3 -m webbrowser "http://localhost:8000"; 
serve: open-browser serve-setup
