<div class="p-4 bg-white shadow rounded-lg w-full">
    <h2 class="text-xl font-semibold mb-4">Resource Statistics</h2>
    <ul class="space-y-2">
        <li class="flex justify-between">
            <span class="font-medium">About:</span>
            <span>{{ $this->getData()['about_count'] }}</span>
        </li>
        <li class="flex justify-between">
            <span class="font-medium">Certificates:</span>
            <span>{{ $this->getData()['certificate_count'] }}</span>
        </li>
        <li class="flex justify-between">
            <span class="font-medium">CVs:</span>
            <span>{{ $this->getData()['cv_count'] }}</span>
        </li>
        <li class="flex justify-between">
            <span class="font-medium">Portfolios:</span>
            <span>{{ $this->getData()['portfolio_count'] }}</span>
        </li>
        <li class="flex justify-between">
            <span class="font-medium">Skills:</span>
            <span>{{ $this->getData()['skills_count'] }}</span>
        </li>
    </ul>
</div>
