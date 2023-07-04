# Installation

## Run servers
`minikube start`

in another window run `minikube tunnel`

`istioctl install -y`

## Build images
`eval $(minikube docker-env)`

`cd /path/to/passport-svc`

*note: github token should have write access to the repo*

`docker build . -t passport-svc --build-arg GITHUB_TOKEN={your github token}`

`cd /path/to/dumper-svc`

`docker build . -t dumper-svc`

To make sure your images are in place run `minikube image list`

kubectl apply -f infra/
