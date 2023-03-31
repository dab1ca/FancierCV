#Connect to Azure

Connect-AzAccount -Identity

#Destroy running app

Remove-AzContainerGroup -Name cv-app -ResourceGroupName ttsvtest
#Build the new containers and deploy
$env = New-AzContainerInstanceEnvironmentVariableObject -Name MARIADB_ROOT_PASSWORD -Value Password1
$port1 = New-AzContainerInstancePortObject -Port 80 -Protocol TCP
$port2 = New-AzContainerInstancePortObject -Port 3306 -Protocol TCP
$container1 = New-AzContainerInstanceObject -Name web -Image dab1ca/cv:cv-appaci -RequestCpu 2 -RequestMemoryInGB 2.5 -Port $port1
$container2 = New-AzContainerInstanceObject -Name db -Image dab1ca/cv:cv-db -RequestCpu 2 -RequestMemoryInGB 2.5 -Port $port2 -EnvironmentVariable @( $env )

New-AzContainerGroup -ResourceGroupName ttsvtest -Name cv-app -Location uksouth -Container @($container1, $container2) -IpAddressType Public

Invoke-AzContainerInstanceCommand -ContainerGroupName cv-app -ContainerName web -ResourceGroupName ttsvtest -Command "sh /var/www/html/hosts-entry.sh"

Invoke-AzContainerInstanceCommand -ContainerGroupName cv-app -ContainerName web -ResourceGroupName ttsvtest -Command "rm  /var/www/html/hosts-entry.sh"
