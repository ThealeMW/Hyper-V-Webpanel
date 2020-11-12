$kagge = Get-VM | Select-Object VMName, State, MemoryAssigned, Uptime, CPUUsage, CreationTime, ProcessorCount, ComputerName

$fulgrogg = @()

foreach ($bärs in $kagge) {

$fulgrogg += [PSCustomObject]@{    
    Hostname = $bärs.VMName
    State = $bärs.State
    RAM = $bärs.MemoryAssigned / 1MB
    Uptime = $bärs.Uptime | Select-Object Days, Hours, Minutes, Seconds
    CPU = $bärs.CPUUsage
    Created = $bärs.CreationTime
    Cores = $bärs.ProcessorCount
    DC = $bärs.ComputerName
    }
    if ( $bärs.State -eq "Running")
{
    $fulgrogg | Sort-Object -Property state | ConvertTo-json | Out-File -FilePath C:\xampp\htdocs\inc\ps\api.php
}

}