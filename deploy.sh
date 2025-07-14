#!/usr/bin/env bash
#
# deploy.sh — Inicializa y sube el proyecto a GitHub

# 1. Nos aseguramos de estar en la rama main
git branch -M main

# 2. Si no hay repositorio Git, lo inicializamos
if [ ! -d .git ]; then
  git init
  echo "✔ Repositorio Git inicializado."
fi

# 3. Añadimos todos los cambios
git add .

# 4. Preguntamos mensaje de commit
read -p "Mensaje de commit: " msg
git commit -m "$msg"

# 5. Configuramos el remoto si no existe
if ! git remote | grep -q origin; then
  git remote add origin git@github.com:RoloInge8/EntregableJes.git
  echo "✔ Remote 'origin' configurado."
fi

# 6. Subimos a GitHub
git push -u origin main
