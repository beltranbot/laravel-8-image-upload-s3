-- s3
1. create bucket in AWS, use default settings
2. create AIM AWS user with S3 full access permissions, make sure you choose the programmatic access option
3. copy the credentials of the user created in the previous step in the .env file
4. install aws library
    composer require league/flysystem-aws-s3-v3:"^1.0"