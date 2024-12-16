<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application $application
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $faculties
 * @var string[]|\Cake\Collection\CollectionInterface $programs
 * @var string[]|\Cake\Collection\CollectionInterface $semesters
 * @var string[]|\Cake\Collection\CollectionInterface $branches
 */
?>
<!--Header-->
<div class="row text-body-secondary">
    <div class="col-10">
        <h1 class="my-0 page_title"><?php echo $title; ?></h1>
        <h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
    </div>
    <div class="col-2 text-end">
        <div class="dropdown mx-3 mt-2">
            <button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-bars text-primary"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $application->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $application->id), 'class' => 'dropdown-item', 'escapeTitle' => false]
                ) ?>
                <?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?>
            </div>
        </div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
    <div class="card-body text-body-secondary">
        <div class="card-title mb-0">Personal Details</div>
        <div class="tricolor_line mb-3"></div>
        <?= $this->Form->create($application, ['type' => 'file']) ?>
        <fieldset>
            <?php //echo $this->Form->control('user_id', ['options' => $users, 'class' => 'form-select']); 
            ?>
            <div class="row">
                <div class="col-md-6"><?php echo $this->Form->control('faculty_id', ['options' => $faculties, 'empty' => 'Select a faculty/college', 'class' => 'form-select']); ?></div>
                <div class="col-md-6"><?php echo $this->Form->control('program_id', ['options' => $programs, 'empty' => 'Select a program', 'class' => 'form-select']); ?></div>
            </div>

            <div class="row">
                <div class="col-md-4"><?php echo $this->Form->control('semester_id', ['options' => $semesters, 'empty' => 'Select a semester', 'class' => 'form-select']); ?></div>
                <div class="col-md-4"><?php echo $this->Form->control('branch_id', ['options' => $branches, 'empty' => 'Select a branch', 'class' => 'form-select']); ?></div>
                <div class="col-md-4"><?php echo $this->Form->control('application_date', ['label' => 'Application Date', 'value' => date('Y-m-d'), 'readonly' => true]); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"><?php echo $this->Form->control('phone'); ?></div>
                <div class="col-md-4"><?php echo $this->Form->control('nric', ['label' => 'Identification Card No.']); ?></div>
                <div class="col-md-4"><?php echo $this->Form->control('matrix', ['label' => 'Student ID']); ?></div>
            </div>

            <div class="row">
                <div class="col-md-4"><?php echo $this->Form->control('start_date'); ?></div>
                <div class="col-md-4"><?php echo $this->Form->control('end_date'); ?></div>
                <div class="col-md-4">
                    <label for="cv">Upload CV</label>
                    <?php echo $this->Form->control('cv', ['type' => 'file', 'label' => false]); ?>
                </div>
            </div>

            <div class="card-title mb-0 mt-3">Proposed Company Details</div>
            <div class="tricolor_line mb-3"></div>

            <div class="row">
                <div class="col-md-6"><?php echo $this->Form->control('pic_name', ['label' => 'Person In-charge Name']); ?></div>
                <div class="col-md-6"><?php echo $this->Form->control('pic_email', ['label' => 'Person In-charge Email']); ?></div>
            </div>

            <?php echo $this->Form->control('company_name', ['label' => 'Purposed Company Name']); ?>
            <div class="row">
                <div class="col-md-6"><?php echo $this->Form->control('company_street_1'); ?></div>
                <div class="col-md-6"><?php echo $this->Form->control('company_street_2'); ?></div>
            </div>

            <div class="row">
                <div class="col-md-4"><?php echo $this->Form->control('company_postcode'); ?></div>
                <div class="col-md-4"><?php echo $this->Form->control('company_city'); ?></div>
                <div class="col-md-4"><?php echo $this->Form->control('company_state', [
                                            'options' => [
                                                'Johor' => 'Johor',
                                                'Melaka' => 'Melaka',
                                                'Negeri Sembilan' => 'Negeri Sembilan',
                                                'Selangor' => 'Selangor',
                                                'Perak' => 'Perak',
                                                'Pulau Pinang' => 'Pulau Pinang',
                                                'Kedah' => 'Kedah',
                                                'Perlis' => 'Perlis',
                                                'Kelantan' => 'Kelantan',
                                                'Terengganu' => 'Terengganu',
                                                'Pahang' => 'Pahang',
                                                'Sabah' => 'Sabah',
                                                'Sarawak' => 'Sarawak',
                                            ],
                                            'empty' => 'Select a state',
                                            'class' => 'form-select'
                                        ]); ?>
                </div>
            </div>



            <?php echo $this->Form->hidden('approval_name'); ?>
            <?php echo $this->Form->hidden('approval_post'); ?>
        </fieldset>
        <div class="text-end">
            <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
            <?= $this->Form->button(__('Submit'), ['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>