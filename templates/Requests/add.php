<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Requests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="requests form content">
            <?= $this->Form->create($request) ?>
            <fieldset>
                <legend><?= __('Add Request') ?></legend>
                <?php
                    echo $this->Form->control('type', [
                        'type' => 'select',
                        'options' => ['albums' => 'Album', 'artists' => 'Artiste'],
                        'empty' => 'Select a type',
                        'required' => true
                    ]);

                    echo $this->Form->control('content', [
                        'label' => 'Name of the artist or album'
                    ]);

                    echo $this->Form->hidden('status', ['value' => 'pending']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
