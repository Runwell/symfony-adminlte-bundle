<?php
namespace SbS\AdminLTEBundle\Model;

interface NotificationInterface
{
    /**
     *  Types of notice
     */
    const TYPE_SUCCESS = 'success';
    const TYPE_INFO    = 'info';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER  = 'danger';

    /**
     * Should return Notice identifier
     * @return integer
     */
    public function getId();

    /**
     * Should return Notice Message
     * @return string
     */
    public function getMessage();

    /**
     * Should return Notice Icon.
     * Example: "fa fa-check-circle text-red'
     * See: http://fontawesome.io/icons/
     * @return string
     */
    public function getIcon();
}
