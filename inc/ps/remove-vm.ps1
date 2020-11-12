param(
[string]$server,
[string]$key
)

if ($key -eq "mov2019topsecretlul")
{
    $vhdxpath = (Get-VM $server | Get-VMHardDiskDrive).Path

    Stop-VM -Name $server -TurnOff -Force
    Remove-Item $vhdxpath -Force
    Remove-VM -Name $server -Force 
}else{
Write-Host 'Access Denied, check your key'
}
