<!DOCTYPE html>
<html lang="en">

<title>Job Listings</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<body>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">

          <thead class="bg-white border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                User Id
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Country
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                City
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Position
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Job Description
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Salary
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Salary Frequency
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Applied On
              </th>
            </tr>
          </thead>

          <tbody>

            @foreach($jobs as $job)
                <tr class={{ ($loop->index % 2) ? "bg-gray-100 border-b" : "bg-white border-b"}}>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold font-medium text-gray-900">
                        {{ $job->user_id  }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 font-semibold  whitespace-nowrap">
                        {{ $job->country  }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 font-semibold whitespace-nowrap">
                        {{ $job->city  }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 font-semibold whitespace-nowrap">
                        {{ $job->position  }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 font-semibold whitespace-nowrap">
                        {{ $job->job_description  }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 font-semibold whitespace-nowrap">
                        {{ number_format($job->salary)  }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 font-semibold whitespace-nowrap">
                        {{ $job->salary_frequency  }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 font-semibold whitespace-nowrap">
                        {{ $job->created_at  }}
                    </td>
                </tr>
            @endforeach

           
          </tbody>

        </table>
      </div>
    </div>
  </div>
</div>
   
</body>

</html>