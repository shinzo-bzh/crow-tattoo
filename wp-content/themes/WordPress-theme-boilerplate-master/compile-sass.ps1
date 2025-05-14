# Vérifier si sass est installé
if (-not (Get-Command sass -ErrorAction SilentlyContinue)) {
    Write-Host "SASS n'est pas installé. Installation en cours..."
    npm install -g sass
}

# Compiler le SASS
sass "assets/sass/main.scss:assets/css/main.css" --style compressed --watch 