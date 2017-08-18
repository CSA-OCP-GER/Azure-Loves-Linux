# Azure Loves Linux - WORK IN PROGRESS

These contents are not ready yet, I have multiple bits and pieces that I am working on combining into a cohesive agenda. The idea of this workshop is having powerpoint-light, demo-heavy sessions. This is the structure so far:

## Part 1: Azure and Linux VMs
1. Azure intro (slides [here](https://github.com/CSA-OCP-GER/Azure-Loves-Linux/raw/master/Azure101-public.pptx))
  * What is Azure
  * What are Azure main differentiators
2. Demo/Hands-On: creating a Linux VM with a custom extension through [this ARM template](https://github.com/CSA-OCP-GER/Azure-Loves-Linux/blob/master/genericLinuxVM-templ.json)
  * What is an ARM template: declarative model
  * Using Azure CLI 2.0 to deploy the ARM template
  * Using custom VM extensions to deploy a customized Linux VM
  * Advanced ARM template concepts like conditional functions or hash variables
3. Demo/Hands-On: using Ansible to manage Azure and Linux VM desired state
  * Use [this guide](https://github.com/erjosito/ansible-azure-lab)

## Part 2: Azure and Linux Containers
4. Demo/Hands-On: use Azure Container Instances
5. Demo/Hands-On: create a Kubernetes ACS cluster
6. Demo: create a CI/CD chain with Github and Jenkins to deploy an app to ACS 
  * For this section a demo (as opposed to a hackaton/lab) is recommended, since there are multiple moving parts external to Azure (Github account configuration, Jenkins configuration, Docker hub account) that could go wrong in a Hands-On scenario
  * You can use [this guide](https://docs.microsoft.com/en-us/azure/container-service/kubernetes/container-service-kubernetes-jenkins) to build your demo
  
## Demo or Hands-On?

If you decide to go for the Hands-On/Hackaton format you will have to make sure that the participants hava a series of resources at hand:
* Azure subscription
* Azure CLI 2.0 installed
