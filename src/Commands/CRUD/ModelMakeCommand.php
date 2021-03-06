<?php

namespace Jenky\LaravelGenerators\Commands\CRUD;

use Illuminate\Foundation\Console\ModelMakeCommand as BaseModelMakeCommand;
use Symfony\Component\Console\Input\InputOption;

class ModelMakeCommand extends BaseModelMakeCommand
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'crud:model';

    /**
     * {@inheritdoc}
     */
    protected function getStub()
    {
        if ($this->option('soft-deletes')) {
            return __DIR__.'/../../../stubs/model.soft_deletes.stub';
        }

        return __DIR__.'/../../../stubs/model.stub';
    }

    /**
     * {@inheritdoc}
     */
    protected function getOptions()
    {
        $parent = parent::getOptions();

        $parent[] = ['soft-deletes', 's', InputOption::VALUE_NONE, 'Generate model class with soft deletes.'];

        return $parent;
    }
}
