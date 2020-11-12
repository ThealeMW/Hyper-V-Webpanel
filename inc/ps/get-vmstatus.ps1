$getstatus = Get-VM | Select-Object VMName, State, MemoryAssigned, Uptime, CPUUsage, CreationTime, ProcessorCount, ComputerName

$cobject = @()

foreach ($status in $getstatus) {

$cobject += [PSCustomObject]@{    
    Hostname = $status.VMName
    State = $status.State
    RAM = $status.MemoryAssigned / 1MB
    Uptime = $status.Uptime | Select-Object Days, Hours, Minutes, Seconds
    CPU = $status.CPUUsage
    Created = $status.CreationTime
    Cores = $status.ProcessorCount
    DC = $status.ComputerName
    }
    if ( $status.State -eq "Running")
{
    $cobject | Sort-Object -Property state | ConvertTo-json | Out-File -FilePath C:\xampp\htdocs\inc\ps\api.php
}

}