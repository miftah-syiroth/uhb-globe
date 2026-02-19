<?php
 
use Livewire\Component;
use Livewire\Attributes\Layout;
 
new #[Layout('layouts::social-humanities')] class extends Component {
    public string $title = 'Social Humanities';
};
?>
 
<div>
    {{ $title }}
</div>