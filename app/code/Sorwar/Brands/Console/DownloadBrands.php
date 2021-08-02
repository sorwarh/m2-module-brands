<?php

namespace Sorwar\Brands\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DownloadBrands extends Command
{

    protected $_brandsFactory;
    public function __construct(
        \Sorwar\Brands\Model\BrandsFactory $brandsFactory
    ) {
        $this->_brandsFactory = $brandsFactory;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('sorwar:brands:csv');
        $this->setDescription('Export the brands into a CSV file');

        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $_brands = $this->_brandsFactory->create();
        $_brands =  $_brands->getCollection();
        $output->writeln("Export done");
        $output->writeln($_brands);
    }
}
