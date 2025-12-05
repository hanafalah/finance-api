#!/bin/bash

REPOS=(
  "laravel-has-props"
  "laravel-feature"
  "laravel-package-generator"
  "module-employee"
  "module-user"
  "api-helper"
  "module-organization"
  "module-people"
  "module-card-identity"
  "module-workspace"
  "module-service"
  "module-item"
  "module-payment"
  "module-payer"
  "module-transaction"
  "module-license"
  "laravel-permission"
  "laravel-stub"
  "module-encoding"
  "module-summary"
  "module-support"
  "module-event"
  "module-tax"
  "laravel-xendit"
  "module-profession"
  "module-regional"
  "microtenant"
)

BASE_PATH="repositories"

for REPO in "${REPOS[@]}"; do
    echo "Adding submodule: $REPO"
    git submodule add -f "git@github.com:hanafalah/$REPO.git" "$BASE_PATH/$REPO"
done

echo "Updating submodules..."
git submodule update --init --recursive

echo "Done!"
