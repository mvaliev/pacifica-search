<?php

namespace PacificaSearchBundle\Service;


use PacificaSearchBundle\Repository\Repository;
use PacificaSearchBundle\Repository\TransactionRepository;
use PacificaSearchBundle\Repository\TransactionRepositoryInterface;

interface RepositoryManagerInterface
{
    /**
     * @return Repository
     */
    public function getInstitutionRepository() : Repository;

    /**
     * @return Repository
     */
    public function getInstrumentRepository() : Repository;

    /**
     * @return Repository
     */
    public function getInstrumentTypeRepository() : Repository;

    /**
     * @return Repository
     */
    public function getProposalRepository() : Repository;

    /**
     * @return Repository
     */
    public function getUserRepository() : Repository;

    /**
     * @return TransactionRepositoryInterface
     */
    public function getTransactionRepository() : TransactionRepositoryInterface;

    /**
     * @return Repository
     */
    public function getFileRepository() : Repository;

    /**
     * @param string
     * @return Repository|TransactionRepository
     */
    public function getRepositoryByClass($class);
}