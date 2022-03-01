<?php

namespace OOP\Relations\Aggregation;


class Project
{
    private string $projectName;
    private \DateTime $deadLine;
    private array $developers;

    /**
     * @param string $projectName
     * @param \DateTime $deadLine
     * @param array $developers
     */
    public function __construct(string $projectName, \DateTime $deadLine, array $developers)
    {
        $this->projectName = $projectName;
        $this->deadLine = $deadLine;
        $this->developers = $developers;
    }

    public function setDeadLineTo(\DateInterval $interval): void
    {
        $this->deadLine->add($interval);
    }

    public function showProjectInfo(): string
    {
        $developers = array_map(static function (Developer $developer) {
            return $developer->getName();
        }, $this->developers);

        $devList = implode(' ,', $developers);

        return "
            Project Name : {$this->projectName} <br>
            Project DeadLine : {$this->deadLine->format('Y-m-d')} <br>
            Project Developers : {$devList}
         ";
    }


}