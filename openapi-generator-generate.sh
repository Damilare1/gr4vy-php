# rm -rf api model
docker run --rm \
  -v ${PWD}:/local openapitools/openapi-generator-cli:v5.1.1 generate \
  -i https://raw.githubusercontent.com/gr4vy/gr4vy-openapi/sdks/openapi.v1.json \
  -g php \
  --git-user-id gr4vy \
  --git-repo-id gr4vy-php \
  --enable-post-process-file \
  -o /local \
  -c /local/.openapi-generator-config.json

sh ./.openapi-generator/replace.sh