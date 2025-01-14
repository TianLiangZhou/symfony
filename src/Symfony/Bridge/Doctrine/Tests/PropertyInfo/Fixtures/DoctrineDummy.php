<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * @Entity
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
#[Entity]
class DoctrineDummy
{
    /**
     * @Id
     * @Column(type="smallint")
     */
    #[Id, Column(type: 'smallint')]
    public $id;

    /**
     * @ManyToOne(targetEntity="DoctrineRelation")
     */
    #[ManyToOne(targetEntity: DoctrineRelation::class)]
    public $foo;

    /**
     * @ManyToMany(targetEntity="DoctrineRelation")
     */
    #[ManyToMany(targetEntity: DoctrineRelation::class)]
    public $bar;

    /**
     * @ManyToMany(targetEntity="DoctrineRelation", indexBy="rguid")
     */
    #[ManyToMany(targetEntity: DoctrineRelation::class, indexBy: 'rguid')]
    protected $indexedRguid;

    /**
     * @ManyToMany(targetEntity="DoctrineRelation", indexBy="rguid_column")
     */
    #[ManyToMany(targetEntity: DoctrineRelation::class, indexBy: 'rguid_column')]
    protected $indexedBar;

    /**
     * @OneToMany(targetEntity="DoctrineRelation", mappedBy="foo", indexBy="foo")
     */
    #[OneToMany(targetEntity: DoctrineRelation::class, mappedBy: 'foo', indexBy: 'foo')]
    protected $indexedFoo;

    /**
     * @OneToMany(targetEntity="DoctrineRelation", mappedBy="baz", indexBy="baz_id")
     */
    #[OneToMany(targetEntity: DoctrineRelation::class, mappedBy: 'baz', indexBy: 'baz_id')]
    protected $indexedBaz;

    /**
     * @Column(type="guid")
     */
    #[Column(type: 'guid')]
    protected $guid;

    /**
     * @Column(type="time")
     */
    #[Column(type: 'time')]
    private $time;

    /**
     * @Column(type="time_immutable")
     */
    #[Column(type: 'time_immutable')]
    private $timeImmutable;

    /**
     * @Column(type="dateinterval")
     */
    #[Column(type: 'dateinterval')]
    private $dateInterval;

    /**
     * @Column(type="json_array")
     */
    #[Column(type: 'json_array')]
    private $jsonArray;

    /**
     * @Column(type="simple_array")
     */
    #[Column(type: 'simple_array')]
    private $simpleArray;

    /**
     * @Column(type="float")
     */
    #[Column(type: 'float')]
    private $float;

    /**
     * @Column(type="decimal", precision=10, scale=2)
     */
    #[Column(type: 'decimal', precision: 10, scale: 2)]
    private $decimal;

    /**
     * @Column(type="boolean")
     */
    #[Column(type: 'boolean')]
    private $bool;

    /**
     * @Column(type="binary")
     */
    #[Column(type: 'binary')]
    private $binary;

    /**
     * @Column(type="custom_foo")
     */
    #[Column(type: 'custom_foo')]
    private $customFoo;

    /**
     * @Column(type="bigint")
     */
    #[Column(type: 'bigint')]
    private $bigint;

    public $notMapped;

    /**
     * @OneToMany(targetEntity="DoctrineRelation", mappedBy="dt", indexBy="dt")
     */
    #[OneToMany(targetEntity: DoctrineRelation::class, mappedBy: 'dt', indexBy: 'dt')]
    protected $indexedByDt;

    /**
     * @OneToMany(targetEntity="DoctrineRelation", mappedBy="customType", indexBy="customType")
     */
    #[OneToMany(targetEntity: DoctrineRelation::class, mappedBy: 'customType', indexBy: 'customType')]
    private $indexedByCustomType;

    /**
     * @OneToMany(targetEntity="DoctrineRelation", mappedBy="buzField", indexBy="buzField")
     */
    #[OneToMany(targetEntity: DoctrineRelation::class, mappedBy: 'buzField', indexBy: 'buzField')]
    protected $indexedBuz;

    /**
     * @Column(type="json", nullable=true)
     */
    #[Column(type: 'json', nullable: true)]
    private $json;

    /**
     * @OneToMany(targetEntity="DoctrineRelation", mappedBy="dummyRelation", indexBy="gen_value_col_id", orphanRemoval=true)
     */
    #[OneToMany(targetEntity: DoctrineRelation::class, mappedBy: 'dummyRelation', indexBy: 'gen_value_col_id', orphanRemoval: true)]
    protected $dummyGeneratedValueList;
}
