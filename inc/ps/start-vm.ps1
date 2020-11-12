param(
[string]$server,
[string]$key
)

if ($key -eq "mov2019topsecretlul")
{

Start-VM -Name $server
}else{
Write-Host 'Access Denied, check your key'
}