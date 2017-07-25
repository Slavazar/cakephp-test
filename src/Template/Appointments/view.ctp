<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Appointment $appointment
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Appointment'), ['action' => 'edit', $appointment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Appointment'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Appointments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="appointments view large-9 medium-8 columns content">
    <h3><?= h($appointment->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($appointment->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($appointment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doctor Id') ?></th>
            <td><?= $this->Number->format($appointment->doctor_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patient Id') ?></th>
            <td><?= $this->Number->format($appointment->patient_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('App Date') ?></th>
            <td><?= h($appointment->app_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('App Time') ?></th>
            <td><?= h($appointment->app_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($appointment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($appointment->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Confirmed') ?></th>
            <td><?= $appointment->confirmed ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
