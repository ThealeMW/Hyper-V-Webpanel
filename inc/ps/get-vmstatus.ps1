$kagge = Get-VM | Select-Object VMName, State, MemoryAssigned, Uptime, CPUUsage, CreationTime, ProcessorCount, ComputerName

$fulgrogg = @()

foreach ($b�rs in $kagge) {

$fulgrogg += [PSCustomObject]@{    
    Hostname = $b�rs.VMName
    State = $b�rs.State
    RAM = $b�rs.MemoryAssigned / 1MB
    Uptime = $b�rs.Uptime | Select-Object Days, Hours, Minutes, Seconds
    CPU = $b�rs.CPUUsage
    Created = $b�rs.CreationTime
    Cores = $b�rs.ProcessorCount
    DC = $b�rs.ComputerName
    }
    if ( $b�rs.State -eq "Running")
{
    $fulgrogg | Sort-Object -Property state | ConvertTo-json | Out-File -FilePath C:\xampp\htdocs\inc\ps\api.php
}

}