@php
    use App\Models\Company;
    use App\Models\Skill;
    use Carbon\Carbon;

    $skills = Skill::all();

    $companies = Company::query()
        ->with('responsibilities')
        ->orderBy('start_date', 'desc')
        ->get();
@endphp

<div class="flex flex-col max-w-4xl gap-8">
    @if($skills->isNotEmpty())
        <div>
            <flux:heading class="mb-4 font-semibold" size="xl">
                Skills
            </flux:heading>

            <ul class="px-4 my-4 space-y-2 leading-8 list-disc list-outside">
                @foreach($skills as $skill)
                    <li>
                        <span class="font-semibold">
                            {{ $skill->title }}:
                        </span>

                        {{ $skill->content }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($companies->isNotEmpty())
        <div>
            <flux:heading class="mb-4 font-semibold" size="xl">
                Experience
            </flux:heading>

            <ul class="px-4 my-4 space-y-4 list-disc list-outside">
                @foreach($companies as $company)
                    <li>
                        <span class="font-semibold dark:text-white">
                            {{ $company->title }}
                        </span>

                        @ {{ $company->name }}

                        @if($company->start_date)
                            - ({{ Carbon::parse($company->start_date)->format('M Y') }} -
                            @if($company->end_date)
                                {{ Carbon::parse($company->end_date)->format('M Y') }}
                            @else
                                Current
                            @endif
                            )
                        @endif

                        <br>

                        @foreach($company->responsibilities as $responsibility)
                            <ul class="leading-8 list-disc list-outside mx-5 py-1">
                                <li>
                                    {{ $responsibility->description }}
                                </li>
                            </ul>
                        @endforeach
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
