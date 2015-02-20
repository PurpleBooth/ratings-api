# ratings-api

This is the demo site for the Silex and MVVM talk. It is the component that contains the silex framework, and returns ratings. 

It's responsibilities are, return a rating for an ISBN

See it in action: [ratings-api.herokuapp.com](http://ratings-api.herokuapp.com)

## Getting started

First ensure vagrant and virtualbox are installed.

You'll need the hosts updater plugin.

```
vagrant plugin install vagrant-hostsupdater
```

### Start the VM
```
vagrant up
vagrant ssh
```
### Install the dependencies.

Inside the VM
```
cd /vagrant
composer install
```


Your service will be running at [ratings-api.herokuapp.com](http://ratings-api.herokuapp.com)
