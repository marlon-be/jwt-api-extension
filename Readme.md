### Behat extension for testing api secure with jwt token

forked from  [Behat/WebApiExtension](https://github.com/Behat/WebApiExtension)

Added methods 

> Then I am authenticating with jwt token as "admin"

> And response should contain jwt token in field "token"

> And response should contain jwt token in field "token" with data

examples tests/features

## usage

### Installation
    
> composer install cnam/jwt-api-extension:0.0.1

### OR update your composer.json add

> require "cnam/jwt-api-extension":"0.0.1"

### Configure behat.yml

```yaml
default:
    formatters:
        progress: true
        pretty: true
    extensions:
        Behat\JwtApiExtension\ServiceContainer\JwtApiExtension:
            base_url: http://mockserver.test/
            secret_key: Very_secret_key
            header_name: X-Access-Token
            encoded_field_name: name
            token_prefix: ''
            ttl: 86400
    suites:
        jwt_suite:
            paths:    [ %paths.base%/tests/features ]
            contexts: ['Behat\JwtApiExtension\Context\JwtApiContext']

```

