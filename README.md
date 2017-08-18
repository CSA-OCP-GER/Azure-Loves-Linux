# Azure-Loves-Linux - WORK IN PROGRESS

These contents are not ready yet, I have multiple bits and pieces that I am working on combining into a cohesive agenda. The idea of this workshop is having powerpoint-light, demo-heavy sessions. This is the structure so far:

## Part 1: Azure and Linux VMs
1. Azure intro (slides [here](https://github.com/CSA-OCP-GER/Azure-Loves-Linux/raw/master/Azure101-public.pptx))
  * What is Azure
  * What are Azure main differentiators
2. Demo/Hands-On: creating a Linux VM with a custom extension through ARM template
  * What is an ARM template: declarative model
  * Using Azure CLI 2.0 to deploy the ARM template
3. Demo/Hands-On: using Ansible to manage Azure and Linux VM desired state
  * Use [this guide](https://github.com/erjosito/ansible-azure-lab)

## Part 2: Azure and Linux Containers
4. Demo/Hands-On: use Azure Container Instances
5. Demo/Hands-On: create a Kubernetes ACS cluster
6. Demo/Hands-On: create a CI/CD chain with Github and Jenkins to deploy an app to ACS 
