import xlrd 
  
loc = ("G:\Jyothy Cleartax 2A\Combine 2A Cleartax with CDN.xlsx") 
  
wb = xlrd.open_workbook(loc) 
sheet = wb.sheet_by_index(0) 
sheet.cell_value(0, 0) 
  
for i in range(sheet.nrows): 
    print(sheet.cell_value(i, 0)) 