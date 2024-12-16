<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch $branch
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
							<li><?= $this->Html->link(__('Edit Branch'), ['action' => 'edit', $branch->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Branch'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Branches'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Branch'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
							</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
	<div class="col-md-9">
		<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
			<div class="card-body text-body-secondary">
            <h3><?= h($branch->name) ?></h3>
    <div class="table-responsive">
        <table class="table">
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($branch->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($branch->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($branch->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($branch->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($branch->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($branch->modified) ?></td>
                </tr>
            </table>
            </div>

			</div>
		</div>
		

            
            

            <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">
                <h4><?= __('Related Applications') ?></h4>
                <?php if (!empty($branch->applications)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Faculty Id') ?></th>
                            <th><?= __('Program Id') ?></th>
                            <th><?= __('Semester Id') ?></th>
                            <th><?= __('Branch Id') ?></th>
                            <th><?= __('Application Date') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Nric') ?></th>
                            <th><?= __('Matrix') ?></th>
                            <th><?= __('Pic Name') ?></th>
                            <th><?= __('Pic Email') ?></th>
                            <th><?= __('Company Name') ?></th>
                            <th><?= __('Company Street 1') ?></th>
                            <th><?= __('Company Street 2') ?></th>
                            <th><?= __('Company Postcode') ?></th>
                            <th><?= __('Company City') ?></th>
                            <th><?= __('Company State') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('End Date') ?></th>
                            <th><?= __('Cv') ?></th>
                            <th><?= __('Cv Dir') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Approval Name') ?></th>
                            <th><?= __('Approval Post') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($branch->applications as $applications) : ?>
                        <tr>
                            <td><?= h($applications->id) ?></td>
                            <td><?= h($applications->user_id) ?></td>
                            <td><?= h($applications->faculty_id) ?></td>
                            <td><?= h($applications->program_id) ?></td>
                            <td><?= h($applications->semester_id) ?></td>
                            <td><?= h($applications->branch_id) ?></td>
                            <td><?= h($applications->application_date) ?></td>
                            <td><?= h($applications->phone) ?></td>
                            <td><?= h($applications->nric) ?></td>
                            <td><?= h($applications->matrix) ?></td>
                            <td><?= h($applications->pic_name) ?></td>
                            <td><?= h($applications->pic_email) ?></td>
                            <td><?= h($applications->company_name) ?></td>
                            <td><?= h($applications->company_street_1) ?></td>
                            <td><?= h($applications->company_street_2) ?></td>
                            <td><?= h($applications->company_postcode) ?></td>
                            <td><?= h($applications->company_city) ?></td>
                            <td><?= h($applications->company_state) ?></td>
                            <td><?= h($applications->start_date) ?></td>
                            <td><?= h($applications->end_date) ?></td>
                            <td><?= h($applications->cv) ?></td>
                            <td><?= h($applications->cv_dir) ?></td>
                            <td><?= h($applications->status) ?></td>
                            <td><?= h($applications->approval_name) ?></td>
                            <td><?= h($applications->approval_post) ?></td>
                            <td><?= h($applications->created) ?></td>
                            <td><?= h($applications->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Applications', 'action' => 'view', $applications->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Applications', 'action' => 'edit', $applications->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Applications', 'action' => 'delete', $applications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applications->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>

		
	</div>
	<div class="col-md-3">
	  Column
	</div>
</div>




