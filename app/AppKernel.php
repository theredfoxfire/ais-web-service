<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new AppBundle\AppBundle(),
            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
            new Ais\BimbinganBundle\AisBimbinganBundle(),
			new Ais\DaftarBundle\AisDaftarBundle(),
			new Ais\DosenBundle\AisDosenBundle(),
			new Ais\GedungBundle\AisGedungBundle(),
			new Ais\HariBundle\AisHariBundle(),
			new Ais\IjasahSmaBundle\AisIjasahSmaBundle(),
			new Ais\JadwalBundle\AisJadwalBundle(),
			new Ais\KabupatenBundle\AisKabupatenBundle(),
			new Ais\KontrakMahasiswaBundle\AisKontrakMahasiswaBundle(),
			new Ais\KontrakDosenBundle\AisKontrakDosenBundle(),
			new Ais\MahasiswaProfileBundle\AisMahasiswaProfileBundle(),
			new Ais\MahasiswaBundle\AisMahasiswaBundle(),
			new Ais\MatakuliahBundle\AisMatakuliahBundle(),
			new Ais\PertemuanBundle\AisPertemuanBundle(),
			new Ais\PertemuanDosenBundle\AisPertemuanDosenBundle(),
			new Ais\PertemuanMahasiswaBundle\AisPertemuanMahasiswaBundle(),
			new Ais\PimpinanProdiBundle\AisPimpinanProdiBundle(),
			new Ais\PrestasiBundle\AisPrestasiBundle(),
			new Ais\ProdiBundle\AisProdiBundle(),
			new Ais\ProvinsiBundle\AisProvinsiBundle(),
			new Ais\RuangBundle\AisRuangBundle(),
			new Ais\SemesterBundle\AisSemesterBundle(),
			new Ais\SlotBundle\AisSlotBundle(),
			new Ais\StatusKeaktifanBundle\AisStatusKeaktifanBundle(),
			new Ais\TranskripBundle\AisTranskripBundle(),
			new Ais\UserBundle\AisUserBundle(),
			new Ais\WisudaBundle\AisWisudaBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
