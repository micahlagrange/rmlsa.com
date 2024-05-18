aws --prod \
s3 sync s3://distill-staging/ s3://rmlsa-prod/

aws --prod \
cloudfront create-invalidation \
--distribution-id $(cat /etc/rmlsa.com.conf/prod_distrib) \
--paths '/*'