<?php

namespace Geekout\Output\Cli;

/**
 * Class TraitConsole
 *
 * @package Geekout\Output\Cli
 */
trait TraitConsole
{
    /** @var int Contador utilizado para enumerar as perguntas */
    protected $counter = 1;

    /** @var string Prefixo utilizado para indentação */
    protected $displayPrefix = '    ';

    /**
     * @param $iteration
     */
    public function putDelimiter($iteration)
    {
        for ($counter = 1; $counter < $iteration; $counter++) {
            echo '#';
        }

        $this->newLine();
    }

    /**
     * Exibe uma perguntas e suas alternativas.
     *
     * @param $title
     * @param $options
     */
    public function putQuestion($title, array $options)
    {
        $this->newLine(1);
        echo $this->indent() . $this->counter++ . '. ' . $title . ':';
        $this->newLine(2);

        foreach ($options as $key => $option) {
            echo $this->indent(2) . $key . '. ' . $option;
            $this->newLine();
        }

        $this->newLine();
        $this->indent(1, 'Resposta: ');
    }

    /**
     * Exibe uma nova linha.
     *
     * @param $howMany
     */
    public function newLine($howMany = 1)
    {
        $counter = 1;
        while ($counter++ <= $howMany) {
            echo PHP_EOL;
        }
    }

    /**
     * Indenta de acordo com o número escolhido.
     *
     * @param int $howMany
     * @param string $append
     *
     * @return string
     */
    public function indent($howMany = 1, $append = '')
    {
        for ($i = 1; $i <= $howMany; $i++) {
            echo $this->displayPrefix;
        }

        if (empty($append) == false) {
            echo $append;
        }
    }
}