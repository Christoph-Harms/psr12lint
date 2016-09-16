<?php
/**
 * Created by IntelliJ IDEA.
 * User: charms-ensink
 * Date: 16.09.16
 * Time: 16:03
 */

namespace Psr12Lint\Commands;

use Cilex\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LintCommand extends Command
{
    /**
     * @inheritdoc
     */
    protected function configure()
    {
       $this
           ->setName('lint:lint')
           ->setDescription('Checks the given file(s) for PSR12 compliance')
           ->addArgument('target', InputArgument::REQUIRED, 'The file or directory to check');
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $target = $input->getArgument('target');
        $output->writeln('Target: ' . $target);
    }
}