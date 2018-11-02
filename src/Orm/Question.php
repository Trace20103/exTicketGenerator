<?php
/**
 * Project : exTicketGenerator
 *
 * @author Trace
 * @licence MIT
 */

namespace exTicketGenerator\Orm;
/**
 * @Entity
 * @Table(name="questions")
 */
final class Question
{
    /**
     * @Id
     * @Column(type="integer")
     * @Generated@Value
     */
    private $id;
    /**
     * @Column(type="integer")
     */
    private $course;
    /**
     * @Column(type="integer")
     */
    private $discipline;
    /**
     * @Column(type="integer")
     */
    private $speciality;
    /**
     * @Column(type="integer")
     */
    private $type;
    /**
     * @Column(type="integer")
     */
    private $difficulty;
    /**
     * @Column(type="string")
     */
    private $title;
    /**
     * @Column(type="string")
     */
    private $description;

}