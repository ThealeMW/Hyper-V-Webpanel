param(
[string]$hostname,
[string]$cores,
[string]$os,
[int64]$ram,
[string]$disk,
[string]$key
)
if ($key -eq "mov2019topsecretlul")
{

New-VHD -Path "C:\VMs\Virtual Hard Disks\$hostname.vhdx" -ParentPath "C:\ISO\REF-2019-Working.vhdx" -Verbose
New-VM -Name $hostname -MemoryStartupBytes $ram -SwitchName LAN -VHDPath "C:\VMs\Virtual Hard Disks\$hostname.vhdx" -Generation 2
Set-VM $hostname -ProcessorCount $cores -Verbose
Set-VMMemory -VMName $hostname -DynamicMemoryEnabled $true
Set-VM -Name $hostname -AutomaticCheckpointsEnabled $false -Verbose
Start-VM $hostname -Verbose
}else{
Write-Host 'Access Denied, check your key'
}