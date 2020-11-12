param(
[string]$server,
[string]$key
)

if ($key -eq "mov2019topsecretlul")
{

Stop-VM -Name $server -Force
}else{
Write-Host 'Access Denied, check your key'
}